import React, { Component,Fragment } from 'react';
import { Container,Row,Col } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {faVideoSlash} from '@fortawesome/free-solid-svg-icons';
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import 'video-react/dist/video-react.css';
import { Player, BigPlayButton } from 'video-react';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import Loading from '../Loading/Loading';

 class Video extends Component {

    constructor(){
        super();

        this.state = {
            show:false,
            video_desc: '....',
            video_url: '....',
            loading:true
        }
    }

    componentDidMount(){

      RestClient.GetRequest(AppUrl.HomeVideo).then(result=>{
          this.setState({
            video_desc:result[0]['video_desc'],
            video_url:result[0]['video_url'], 
            loading:false
          }); 
      });
    
     }



    modalClose = ()=>this.setState({show:false})
    modalOpen = ()=>this.setState({show:true})

  render() {
    if(this.state.loading == true){
      return <Loading/>
  }else{
    return (
      <Fragment>
         <Container className='text-center'>
         <h2 className='serviceMainTitle text-center'>Our Videos</h2>
            <div className='bottom'></div>
            <Row>
                <Col lg={6} md={6} sm={12} className='videoText'>
                   <p className='serviceDes text-justify'>
                    {this.state.video_desc}
                   </p>
                </Col>

                <Col lg={6} md={6} sm={12} className='videoCard'>
                <FontAwesomeIcon onClick={this.modalOpen} className='iconProject' icon={faVideoSlash} />
                    
                </Col>

            </Row>

         </Container>

                <Modal size="lg" show={this.state.show} onHide={this.modalClose}>
                 
                    <Modal.Body>
                    <Player src={this.state.video_url}>
                    <BigPlayButton position="center" />
                    </Player>
                    </Modal.Body>
                    <Modal.Footer>
                    <Button variant="secondary" onClick={this.modalClose}>
                        Close
                    </Button>
                  
                    </Modal.Footer>
               </Modal>
        
      </Fragment>
    )
  }
  }
}

export default Video

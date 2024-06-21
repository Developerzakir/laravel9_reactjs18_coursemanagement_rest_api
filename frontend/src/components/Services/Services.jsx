import React, { Component, Fragment } from 'react'
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Button from 'react-bootstrap/Button';
import '../../assets/css/custom.css';
import '../../assets/css/bootstrap.min.css';
import designIcon from '../../assets/images/design.png'
import ecommerceIcon from '../../assets/images/ecommerce.png'
import webIcon from '../../assets/images/web.png'
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import Loading from '../Loading/Loading';
import Zoom from 'react-reveal/Zoom'
 class Services extends Component {

    constructor() {
        super()
      
        this.state = {
            myData: [],
            loading:true
            
        }
      }
      
    
     componentDidMount(){
    
      RestClient.GetRequest(AppUrl.HomeServiceAll).then(result=>{
          this.setState({myData:result,loading:false}); 
      });
    
     }

  render() {

    if(this.state.loading == true){
        return <Loading/>
    }else{

    const Mylist = this.state.myData;
    const MyView = Mylist.map(Mylist=>{

        return  <Col lg={4} md={6} sm={12}>
            <Zoom top>
            <div className='serviceCard text-center'>
                <img className='webIcon' src={Mylist.service_logo}   />
                <h2 className='serviceName'>{Mylist.service_name}</h2>
                <p className='serviceDes'>{Mylist.service_text}</p>
            </div>
          </Zoom>
        </Col>
            

          })


    return (
    <Fragment>
        <Container>
            <h2 className='serviceMainTitle text-center'>MY SERVICES</h2>
            <div className='bottom'></div>
            <Row>

                {MyView}
                

                
            </Row>
        </Container>
    </Fragment>
    )
}
  }
}

export default Services

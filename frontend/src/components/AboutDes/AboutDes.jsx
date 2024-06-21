import React, { Component, Fragment } from 'react'
import { Container, Row,Col } from 'react-bootstrap'
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import parse from 'html-react-parser';
import Loading from '../Loading/Loading';
import WentWrong from '../WentWrong/WentWrong';

 class AboutDes extends Component {

  constructor() {
    super()
  
    this.state = {
       
        aboutDesc: '....',
        loading:true,
        error:false 
        
    }
  }
  

 componentDidMount(){

  RestClient.GetRequest(AppUrl.HomeInformationAll).then(result=>{

    if(result == null){
      this.setState({error:true}); 
    }else{
      this.setState({
        aboutDesc:result[0]['about'],
        loading:false,  
      });

    }
      
  }).catch(error=>{
    this.setState({error:true}); 
  }); 

 }


  render() {
    if(this.state.loading == true){
      return <Loading/>
  }else if(this.state.loading == false){

    return (
      <Fragment>
        <Container className='mt-4'>
            <Row>
                <Col sm={12} lg={12} md={12} >

                {parse(this.state.aboutDesc)}
                </Col>
            </Row>
        </Container>
      </Fragment>
    )
  } //end else
  else if(this.state.error == true){
    return <WentWrong />

  }
  
  }
}

export default AboutDes

import React, { Component, Fragment } from 'react'
import { Col, Container, Row } from 'react-bootstrap'
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import parse from 'html-react-parser';
import Loading from '../Loading/Loading';
import WentWrong from '../WentWrong/WentWrong';

 class PrivacyDes extends Component {

  constructor() {
    super()
  
    this.state = {
       
        privacyDes: '....',
        loading:true,
        error:false 
        
    }
  }
  

 componentDidMount(){

  RestClient.GetRequest(AppUrl.HomeInformationAll).then(result=>{

    if(result == null){
      this.setState({error:true, loading:false}); 
    }else{
      this.setState({
        privacyDes:result[0]['privacy'],
        loading:false
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
        <Container>
            <Row>
                <Col lg={12} md={12} sm={12}>
                {parse(this.state.privacyDes)}
                
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

export default PrivacyDes

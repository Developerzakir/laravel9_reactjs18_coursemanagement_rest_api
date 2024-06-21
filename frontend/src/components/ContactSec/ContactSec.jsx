import React, { Component, Fragment } from 'react'
import { Container, Row,Col } from 'react-bootstrap'
import '../../assets/css/custom.css';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import Loading from '../Loading/Loading';

 class ContactSec extends Component {
    constructor() {
        super()
      
        this.state = {
           
            address: '....',
            email: '....',
            phone: '....',
            loading:true
         
            
        }
      }
      
    
     componentDidMount(){
    
      RestClient.GetRequest(AppUrl.HomeFooterAll).then(result=>{
          this.setState({
            address:result[0]['address'],
            email:result[0]['email'],
            phone:result[0]['phone'],
            loading:false
           
          }); 
      });
    
     }

     sendContact(){
      let name = document.getElementById('name').value;
      let email = document.getElementById('email').value;
      let message = document.getElementById('message').value;

      let jsonObject = {name:name,email:email,message:message}
      RestClient.PostRequest(AppUrl.ContactSend,JSON.stringify(jsonObject)
      ).then(result=>{
        alert(result);
      }).catch(error=>{
        alert('error');
      })


     }

  render() {
    if(this.state.loading == true){
      return <Loading/>
  }else{

    return (
      <Fragment>
        <Container className='mt-5'>
            <Row>
                <Col lg={6} md={6} sm={12}>
                 <h1 className='serviceName'>Quick Connect</h1>
                    <Form>
                        <Form.Group className="mb-3">
                            <Form.Label>Your Name</Form.Label>
                            <Form.Control id="name" type="text" placeholder="Enter your name" />
                        </Form.Group>

                        <Form.Group className="mb-3">
                            <Form.Label>Your Email</Form.Label>
                            <Form.Control id="email" type="email" placeholder="Enter your email" />
                        </Form.Group>

                        <Form.Group className="mb-3">
                            <Form.Label>Message</Form.Label>
                            <Form.Control id="message" as="textarea" rows={3} />
                        </Form.Group>

                        <Button onClick={this.sendContact} variant="primary">
                            Submit
                        </Button>
                    </Form>
                </Col>

                <Col lg={6} md={6} sm={12}>
                  <h1 className='serviceName'>Discuss Now</h1>
                  <p className='serviceDes'>
                  <b>Address</b>: &nbsp;{this.state.address} <br />
                        <b>Email</b>: &nbsp;{this.state.email} <br />
                        <b>Phone</b>: &nbsp;{this.state.phone} 
                    </p>
                </Col>
            </Row>
        </Container>
        
      </Fragment>
    )
  }
  }
}

export default ContactSec

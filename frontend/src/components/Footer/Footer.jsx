import React, { Component, Fragment } from 'react'
import { Col, Container, Row } from 'react-bootstrap'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {faFacebook} from '@fortawesome/free-brands-svg-icons';
import {faYoutube} from '@fortawesome/free-brands-svg-icons';
import {faTwitter} from '@fortawesome/free-brands-svg-icons';
import '../../assets/css/custom.css';
import { Link } from 'react-router-dom';
import { LinkContainer } from 'react-router-bootstrap';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import WentWrong from '../WentWrong/WentWrong';
import Loading from '../Loading/Loading';

 class Footer extends Component {

  constructor() {
    super()
  
    this.state = {
       
        address: '....',
        email: '....',
        phone: '....',
        facebook: '....',
        youtube: '....',
        twitter: '....',
        loading:true,
        error:false
        
    }
  }
  

 componentDidMount(){

  RestClient.GetRequest(AppUrl.HomeFooterAll).then(result=>{
    if(result == null){
      this.setState({error:true}); 
    }else{
      this.setState({
        address:result[0]['address'],
        email:result[0]['email'],
        phone:result[0]['phone'],
        facebook:result[0]['facebook'],
        youtube:result[0]['youtube'],
        twitter:result[0]['twitter'],
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
        <Container fluid={true} className='footerSection'>
            <Row>
                <Col lg={3} md={6} sm={12} className='p-5 text-center'>
                    <h2 className='footerName'>Follow Us</h2>
                  <div className='social-container'>

                    <a target='_blank' href={this.state.facebook} className='facebook social'>
                        <FontAwesomeIcon size='2x' icon={faFacebook} />
                        </a>
                        <a target='_blank' href={this.state.youtube} className='youtube social'>
                        <FontAwesomeIcon size='2x'  icon={faYoutube} />
                        </a>
                        <a target='_blank' href={this.state.twitter} className='twitter social'>
                        <FontAwesomeIcon size='2x'  icon={faTwitter} />
                        </a>
                  </div>
                </Col>

                <Col lg={3} md={6} sm={12} className='p-5 text-center'>
                    <h2 className='footerName'>Address</h2>
                    <p className='addressDesc'>
                       Address:{this.state.address} <br />
                        Email:{this.state.email} <br />
                        Phone:{this.state.phone} 
                    </p>
                </Col>

                <Col lg={3} md={6} sm={12} className='p-5 text-center'>
                    <h2 className='footerName'>Information</h2>
                    <Link className='footerLink' to="/about">About Me</Link><br />
                    <a  className='footerLink' href="">Company Profile</a><br />
                    <Link className='footerLink' to="/contact">Contact Us</Link>
                </Col>

                <Col lg={3} md={6} sm={12} className='p-5 text-center'>
                    <h2 className='footerName'>Policy</h2>
                    <Link className='footerLink' to="/refund">Refund Policy</Link><br />
                    {/* <LinkContainer to="/">
                   <Nav.Link>Home</Nav.Link>
                  </LinkContainer> */}
                    <Link className='footerLink' to="/terms">Terms and Condition</Link><br />
                    <Link className='footerLink' to="/privacy">Privacy Policy</Link>
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

export default Footer

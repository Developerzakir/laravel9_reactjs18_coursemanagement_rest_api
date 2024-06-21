import React, { Component, Fragment } from 'react';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Button from 'react-bootstrap/Button';
import '../../assets/css/custom.css';
import '../../assets/css/bootstrap.min.css';
import axios from 'axios';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import Fade from 'react-reveal/Fade';

class TopBanner extends Component {

  constructor(props) {
    super(props)
  
    this.state = {
       title: "",
       subtitle: "",
       error: null
    }
  }
  

 componentDidMount(){

  RestClient.GetRequest(AppUrl.HomeTopTitle).then(result=>{

    if (result) {
      this.setState({
        title: result[0]['home_title'],
        subtitle: result[0]['home_subtitle']
      });
    } else {
      this.setState({ title: "????", subtitle:'????' });
    }
  }).catch(error => {
    this.setState({ error: "Failed to fetch data" });
  });

 }

  render() {
    if (this.state.error) {
      return <div>Error: {this.state.error}</div>;
    }
    return (
      <Fragment>
         <Container fluid={true} className="topFixedBanner p-0">
            <div className="topBannerOverlay"> 
                <Container className="topContent">
                    <Row>
                        <Col className='text-center'>
                        <Fade top>
                        <h1 className='topTitle'>{this.state.title}</h1>
                        <h4 className='topSubTitle'>{this.state.subtitle}</h4>
                        </Fade>
                        <Button variant="primary">Learn More</Button>
                        </Col>
                    </Row>
                </Container>
            </div>
         </Container>
      </Fragment>
    )
  }
}

export default TopBanner

import React, { Component, Fragment } from 'react';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import '../../assets/css/custom.css';
import '../../assets/css/bootstrap.min.css';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {faCheckSquare} from '@fortawesome/free-solid-svg-icons';
import {faGlobe} from '@fortawesome/free-solid-svg-icons';
import {faLaptop} from '@fortawesome/free-solid-svg-icons';
import {faStar} from '@fortawesome/free-solid-svg-icons';
import CountUp from 'react-countup';
import VisibilitySensor from 'react-visibility-sensor';

 class Summery extends Component {
  render() {
    return (
      <Fragment>
        <Container fluid={true} className="summeryBanner p-0">
            <div className="summeryBannerOverlay"> 
                <Container className='text-center'>
                    <Row>
                        <Col lg={8} md={6} sm={12}>
                            <Row className="countSection">
                                <Col>
                                <FontAwesomeIcon className='iconProject' icon={faGlobe} />
                                <h1 className='countNumber'>
                                   <CountUp start={0} end={35000}>
                                        {({ countUpRef, start }) => (
                                           <VisibilitySensor onChange={start}>
                                            <span ref={countUpRef} />
                                            </VisibilitySensor>     
                                        
                                        )}
                                    </CountUp>
                                </h1>
                                <h4 className='countTitle'>Students Worldwide</h4>
                                <hr className="bg-white" />
                                </Col>

                                <Col>
                                <FontAwesomeIcon className='iconProject' icon={faLaptop} />
                                <h1 className='countNumber'>
                                <CountUp start={0} end={22}>
                                        {({ countUpRef, start }) => (
                                           <VisibilitySensor onChange={start}>
                                            <span ref={countUpRef} />
                                            </VisibilitySensor>     
                                        
                                        )}
                                    </CountUp>
                                </h1>
                                <h4 className='countTitle'>Course Published</h4>
                                <hr className="bg-white" />
                                </Col>

                                <Col>
                                <FontAwesomeIcon className='iconProject' icon={faStar} />
                                <h1 className='countNumber'>
                                <CountUp start={0} end={3000}>
                                        {({ countUpRef, start }) => (
                                           <VisibilitySensor onChange={start}>
                                            <span ref={countUpRef} />
                                            </VisibilitySensor>     
                                        
                                        )}
                                    </CountUp>
                                </h1>
                                <h4 className='countTitle'>Students Review</h4>
                                <hr className="bg-white " />
                                </Col>
                            </Row>
                        </Col>

                        <Col lg={4} md={6} sm={12}>
                           <Card className='cardWork'>
                              
                                <Card.Body>
                                    <Card.Title className='cardTitle'>What I Have Achieved?</Card.Title>
                                    <Card.Text>
                                        <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />  Requirement Gathering</p>
                                        <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />System Analysis</p>
                                        <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />Coding Testing</p>
                                        <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />Implementation</p>
                                    </Card.Text>
                                   
                                </Card.Body>
                            </Card>
                        </Col>
                    </Row>
                
                </Container>
            </div>
         </Container>
        
      </Fragment>
    )
  }
}

export default Summery

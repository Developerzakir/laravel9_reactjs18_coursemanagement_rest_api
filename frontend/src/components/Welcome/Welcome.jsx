import React, { Component, Fragment } from 'react'
import { Col, Container, Row } from 'react-bootstrap'
import '../../assets/css/custom.css';
import pageOne from '../../assets/images/page1.png';
import pageTwo from '../../assets/images/page2.png';
import pageThree from '../../assets/images/page3.png';
import Slide from 'react-reveal/Slide';

 class Welcome extends Component {
  render() {
    return (
      <Fragment>
        <div className='intro-area-top'>
            <Container className='text-center '>
                <Row>
                    <Col lg={12} md={12} sm={12}>

                        <div className='section-title text-center'>
                            <div className='intro-area-inner'>
                                    <h6 className='sub-title double-line'><b>Welcome</b></h6>
                                    <h2 className='mainTitle'>An exemplary <br /> learning Community</h2>

                                    <Container>
                                        <Row>
                                            <Col lg={4} md={6} sm={12}>
                                                <Slide top>
                                                <img src={pageOne}  />
                                                </Slide>
                                                <h3 className='serviceName mt-2'>Easy As it Gets</h3>
                                                <p className='serviceDes'>Lorem, ipsum dolor</p>
                                            </Col>

                                            <Col lg={4} md={6} sm={12}>
                                            <Slide top>
                                            <img src={pageTwo}  />
                                            </Slide>
                                            <h3 className='serviceName mt-2'>Teach The way you Want</h3>
                                                <p className='serviceDes'>Lorem, ipsum dolor</p>
                                            </Col>

                                            <Col lg={4} md={6} sm={12}>
                                            <Slide top>
                                            <img src={pageThree}  />
                                            </Slide>
                                            <h3 className='serviceName mt-2'>The Small Matter of Getting</h3>
                                                <p className='serviceDes'>Lorem, ipsum dolor</p>
                                            </Col>
                                        </Row>
                                    </Container>
                            </div>
                        </div>

                    </Col>
                </Row>
            </Container>
        </div>
        
      </Fragment>
    )
  }
}

export default Welcome

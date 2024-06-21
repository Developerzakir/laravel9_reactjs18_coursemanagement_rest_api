import React, { Component, Fragment } from 'react'
import { Col, Container, Row } from 'react-bootstrap'
import ErrorIcon from '../../assets/images/error.svg'
import '../../assets/css/custom.css'

 class WentWrong extends Component {
  render() {
    console.log(ErrorIcon);
    return (
      <Fragment>
        <Container className='text-center'>
            <Row>
                <Col>
                <img className='errorIcon' src={ErrorIcon} alt="" />
            

                </Col>
            </Row>
        </Container>
        
      </Fragment>
    )
  }
}

export default WentWrong

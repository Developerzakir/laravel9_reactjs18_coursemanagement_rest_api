import React, { Component, Fragment } from 'react'
import { Row,Col, Container } from 'react-bootstrap';
import LoadingIcon from '../../assets/images/loading.svg';

 class Loading extends Component {
  render() {
    return (
      <Fragment>

        <Container className='text-center'>
            <Row>
                <Col>
                <img src={LoadingIcon} alt="" />

                </Col>
            </Row>
        </Container>
        
      </Fragment>
    )
  }
}

export default Loading;

import React, { Component, Fragment } from 'react'
import { Container,Row,Col } from 'react-bootstrap';
// import '../../assets/css/custom.css';

 class PageTop  extends Component {
  render() {
    return (
      <Fragment>
          <Container fluid={true} className="topFixedPage p-0">
            <div className="topPageOverlay"> 
          
                <Container className="topContentPage">
                    <Row>
                        <Col className='text-center'>
                     
                        <h4 className='topPageTitle'>{this.props.pageTitle}</h4>
                     
                        </Col>
                    </Row>
                </Container>
            </div>
         </Container>
        
      </Fragment>
    )
  }
}

export default PageTop;

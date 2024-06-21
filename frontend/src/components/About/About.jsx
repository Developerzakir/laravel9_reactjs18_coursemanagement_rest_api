import React, { Component, Fragment,createRef } from 'react';
import { Container, Row,Col } from 'react-bootstrap';
import face from '../../assets/images/man.png';
import { init } from 'ityped';



 class About extends Component {

    constructor(props) {
        super(props);
        this.myElement = createRef();
        this.itypedInitialized = false;
        

      }
    
      componentDidMount() {
        if (!this.itypedInitialized) {
          this.initializeItyped();
        }
      }
    
      initializeItyped = () => {
        if (this.myElement.current) {
          // Clear any previous content
          this.myElement.current.innerHTML = '';
          
          // Initialize ityped
          init(this.myElement.current, { showCursor: false, strings: ['Web Developer!', 'Online Instructor!'] });
          this.itypedInitialized = true;
        }
      }

  render() {
    return (
      <Fragment>
        <Container className='text-center'>
        <h2 className='serviceMainTitle text-center'>About Me</h2>
            <div className='bottom'></div>
            <Row>
                <Col lg={6} md={6} sm={12}>
                    <div className='aboutImg'>
                    <img className='aboutimages' src={face}  />
                    </div>
                </Col>

                <Col lg={6} md={6} sm={12}>
                    <div className='aboutmebody'>
                        <h2>Hi There I'm</h2>
                        <h2 className='aboutname'>Zakir BD</h2>
                        <h3>Work as <span id="myElement" ref={this.myElement}></span></h3>
                    </div>

                </Col>
            </Row>
        </Container>
        
      </Fragment>
    )
  }
}

export default About

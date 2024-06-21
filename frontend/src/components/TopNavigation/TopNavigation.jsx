import React, { Component, Fragment } from 'react';
import { Link } from 'react-router-dom';
import { LinkContainer } from 'react-router-bootstrap';
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import whiteLogo from '../../assets/images/logo_white.png';
import blackLogo from '../../assets/images/logo_black.png';
import '../../assets/css/custom.css';

 class TopNavigation extends Component {

  constructor(){
    super();

    this.state = {
      navBarTitle: 'navTitle',
      navBarLogo: [whiteLogo], //object
      navBack: 'navBackground'
    }

  }

  onScroll= ()=>{
    if(window.scrollY>100){
      this.setState({navBarTitle:'navTitleScroll', navBarLogo:[blackLogo], navBack:'navBackgroundScroll'})
    }else if(window.scrollY<100){
      this.setState({navBarTitle:'navTitle', navBarLogo:[whiteLogo], navBack:'navBackground'})
    }
  }

  componentDidMount(){
    window.addEventListener('scroll', this.onScroll);
  }



  render() {
    return (
      <Fragment>
        <Navbar className={this.state.navBack} collapseOnSelect fixed='top' expand="lg"  data-bs-theme="dark"  >
      <Container>
        <Navbar.Brand href="#home" className={this.state.navBarTitle}>
         <Link to="/"><img src={this.state.navBarLogo} alt="" /></Link> 
        </Navbar.Brand>
        <Navbar.Toggle aria-controls="responsive-navbar-nav" />
        <Navbar.Collapse id="responsive-navbar-nav">
          <Nav className="me-auto">
           
          </Nav>
          <Nav>
                <LinkContainer to="/">
                  <Nav.Link>Home</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/about">
                  <Nav.Link>About</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/service">
                  <Nav.Link>Services</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/course">
                  <Nav.Link>Courses</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/portfolio">
                  <Nav.Link>Portfolio</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/contact">
                  <Nav.Link>Contact Us</Nav.Link>
                </LinkContainer>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
      </Fragment>
    )
  }
}

export default TopNavigation

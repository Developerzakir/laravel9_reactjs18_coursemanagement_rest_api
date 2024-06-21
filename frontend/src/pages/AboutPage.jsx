import React, { Component, Fragment } from 'react'
import TopNavigation from '../components/TopNavigation/TopNavigation'
import PageTop from '../components/PageTop/PageTop'
import AboutDes from '../components/AboutDes/AboutDes'
import Footer from '../components/Footer/Footer'
import About from '../components/About/About'
import '../assets/css/custom.css';

 class AboutPage extends Component {
  componentDidMount(){
    window.scroll(0,0)
  }
  render() {
    return (
      <Fragment>
        <TopNavigation />
        <PageTop pageTitle="About Us" />
        <About />
        <AboutDes />
        <Footer />
      </Fragment>
    )
  }
}

export default AboutPage

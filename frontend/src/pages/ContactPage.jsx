import React, { Component, Fragment } from 'react'
import TopNavigation from '../components/TopNavigation/TopNavigation'
import PageTop from '../components/PageTop/PageTop'
import ContactSec from '../components/ContactSec/ContactSec'
import Footer from '../components/Footer/Footer'

 class ContactPage extends Component {
  componentDidMount(){
    window.scroll(0,0)
  }
  render() {
    return (
      <Fragment>
        <TopNavigation />
        <PageTop pageTitle="Contact Us" />
        <ContactSec />
        <Footer />
        
      </Fragment>
    )
  }
}

export default ContactPage

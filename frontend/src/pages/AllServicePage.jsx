import React, { Component, Fragment } from 'react'
import TopNavigation from '../components/TopNavigation/TopNavigation'
import PageTop from '../components/PageTop/PageTop'
import Services from '../components/Services/Services'
import ContactSec from '../components/ContactSec/ContactSec'
import Footer from '../components/Footer/Footer'

 class AllServicePage extends Component {
  componentDidMount(){
    window.scroll(0,0)
  }
  render() {
    return (
      <Fragment>
        <TopNavigation />
        <PageTop pageTitle="Our Services" />
        <Services />
        <ContactSec />
        <Footer />
        
      </Fragment>
    )
  }
}

export default AllServicePage

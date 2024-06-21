import React, { Component, Fragment } from 'react'
import TopNavigation from '../components/TopNavigation/TopNavigation'
import PageTop from '../components/PageTop/PageTop'
import PrivacyDes from '../components/PrivacyDes/PrivacyDes'
import Footer from '../components/Footer/Footer'

 class PrivacyPage extends Component {
  componentDidMount(){
    window.scroll(0,0)
  }
  render() {
    return (
      <Fragment>

        <TopNavigation title="Privacy and Policy" />
        <PageTop pageTitle="Privacy and Policy"/>
        <PrivacyDes />
        <Footer />
        
      </Fragment>
    )
  }
}

export default PrivacyPage

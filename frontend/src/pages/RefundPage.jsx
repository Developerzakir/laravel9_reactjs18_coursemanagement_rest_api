import React, { Component, Fragment } from 'react'
import TopNavigation from '../components/TopNavigation/TopNavigation'
import PageTop from '../components/PageTop/PageTop'
import RefundDes from '../components/RefundDes/RefundDes'
import Footer from '../components/Footer/Footer'

 class RefundPage extends Component {
  componentDidMount(){
    window.scroll(0,0)
  }
  render() {
    return (
      <Fragment>
        <TopNavigation title="Refund Policy" />
        <PageTop pageTitle="Refund Policy"/>
        <RefundDes />
        <Footer />
      </Fragment>
    )
  }
}

export default RefundPage

import React, { Component, Fragment } from 'react'
import TopNavigation from './../components/TopNavigation/TopNavigation';
import PageTop from './../components/PageTop/PageTop';
import CourseDetails from '../components/CourseDetails/CourseDetails';
import Footer from './../components/Footer/Footer';
import RestClient from '../RestApi/RestClient';
import AppUrl from '../RestApi/AppUrl';


import { useParams } from 'react-router-dom';

// Higher-Order Component to pass route params to class component
function withRouter(Component) {
  return function(props) {
    const params = useParams();
    return <Component {...props} params={params} />;
  }
}

 class CourseDetailsPage extends Component {

  constructor(props) {
    super(props);
  
    this.state = {
      MycourseId: props.params.courseId,
      courseName: props.params.courseName,
      courseData: []
       
    }
  }


  componentDidMount(){
    window.scroll(0,0)

    RestClient.GetRequest(AppUrl.CourseDetails+this.state.MycourseId).then(result => {
      if (result && result.length > 0) {
        this.setState({courseData:result });
      } else {
        // Handle the case where the result is null or empty
        console.error("No project details found or result is null");
      }
    }).catch(error => {
      // Handle any errors from the API request
      console.error("Error fetching project details:", error);
    });
  }
  render() {
    return (
      <Fragment>
        
        <TopNavigation title="Course Details" />
        <PageTop pageTitle={this.state.courseName} />
        <CourseDetails courseAllData={this.state.courseData} />
        <Footer />
        
      </Fragment>
    )
  }
}

export default withRouter(CourseDetailsPage);

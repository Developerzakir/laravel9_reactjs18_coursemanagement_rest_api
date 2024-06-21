import React, { Component, Fragment } from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import AllServicePage from '../pages/AllServicePage';
import AllCourses from '../components/AllCourses/AllCourses';
import PortfolioPage from '../pages/PortfolioPage';
import AboutPage from '../pages/AboutPage';
import ContactPage from '../pages/ContactPage';
import HomePage from '../pages/HomePage';
import AllCoursePage from '../pages/AllCoursePage';
import RefundPage from '../pages/RefundPage';
import TermsPage from '../pages/TermsPage';
import PrivacyPage from '../pages/PrivacyPage';
import ProjectDetailsPage from '../pages/ProjectDetailsPage';
import CourseDetailsPage from '../pages/CourseDetailsPage';

 class AppRouter extends Component {
  render() {
    return (
      <Fragment>
       
        <Routes>
          <Route path="/" element={<HomePage />} />
          <Route path="/service" element={<AllServicePage />} />
          <Route path="/course" element={<AllCoursePage />} />
          <Route path="/portfolio" element={<PortfolioPage />} />
          <Route path="/about" element={<AboutPage />} />
          <Route path="/contact" element={<ContactPage />} />
          <Route path="/refund" element={<RefundPage />} />
          <Route path="/terms" element={<TermsPage />} />
          <Route path="/privacy" element={<PrivacyPage />} />
          <Route path="/projectdetails/:projectId/:projectName" element={<ProjectDetailsPage />} />
          <Route path="/coursedetails/:courseId/:courseName" element={<CourseDetailsPage />} />
        </Routes>  
      </Fragment>
    )
  }
}

export default AppRouter

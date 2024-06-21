import React, { Component, Fragment } from 'react'
import { Col, Container, Row } from 'react-bootstrap'
import ProjectDeatilsImg  from '../../assets/images/project_details.png'
import '../../assets/css/custom.css';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {faCheckSquare} from '@fortawesome/free-solid-svg-icons';
import { useParams } from 'react-router-dom';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';

 class ProjectDetails extends Component {

  constructor(props) {
    super(props);
  
    this.state = {
      ProjectId:props.id,
      img_two: '....',
      project_name: '....',
      project_desc: '....',
      project_feature: '....',
      live_preview: '....',


       
    }
  }

  componentDidMount() {
    RestClient.GetRequest(AppUrl.ProjectDetails+this.state.ProjectId).then(result => {
      if (result && result.length > 0) {
        this.setState({
          img_two: result[0]['img_two'],
          project_name: result[0]['project_name'],
          project_desc: result[0]['project_desc'],
          project_feature: result[0]['project_feature'],
          live_preview: result[0]['live_preview'],
        });
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
        <Container className='mt-5'>
            <Row>
                <Col lg={6} md={6} sm={12}>
                <div className='about-thumb-wrap after-shape'>
                   <img src={this.state.img_two}  />
                </div>
                
                </Col>

                <Col lg={6} md={6} sm={12}>
                <div>
                  <h1 className="projectDetailsText">{this.state.project_name}</h1>
                  <p>{this.state.project_desc}</p>
                  <p>{this.state.project_feature}</p>

                  <a className='btn btn-info' href={this.state.live_preview}>Live Preview</a>

                
                </div>
                
                </Col>
            </Row>
        </Container>
        
      </Fragment>
    )
  }
}

export default ProjectDetails

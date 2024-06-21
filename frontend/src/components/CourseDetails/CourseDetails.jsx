import React, { Component } from 'react'
import { Fragment } from 'react'
import { Col, Container, Row } from 'react-bootstrap'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {faCheckSquare} from '@fortawesome/free-solid-svg-icons';
import { Player, BigPlayButton } from 'video-react';


 class CourseDetails extends Component {

  constructor(props) {
    super(props);
  
    // this.state = {
     
       
    // }
  }


  render() {
   
    let small_img = "";
    let long_title = "";
    let long_desc = "";
    let total_duration = "";
    let total_student = "";
    let total_lecture = "";
    let skill_all = "";
    let video_url = "";

    let CourseDetailsArray = this.props.courseAllData;

    if(CourseDetailsArray.length == 1){
      long_title = CourseDetailsArray[0]['long_title'];
      long_desc = CourseDetailsArray[0]['long_desc'];
      total_duration = CourseDetailsArray[0]['total_duration'];
      total_student = CourseDetailsArray[0]['total_student'];
      total_lecture = CourseDetailsArray[0]['total_lecture'];
      skill_all = CourseDetailsArray[0]['skill_all'];
      video_url = CourseDetailsArray[0]['video_url'];
      small_img = CourseDetailsArray[0]['small_img'];
    }





    return (
      <Fragment>
        <Container className='mt-5'>
            <Row>
                <Col lg={8} md={6} sm={12}>
                <h1 className='courseDetailsText'>{long_title}</h1>
                <img className='courseDetailsImg' src={small_img} alt="" />
                <p className='mt-4'>{long_desc}</p>
                </Col>

                <Col lg={4} md={6} sm={12}>
                <div className='widget_feature'>

                           <h4 class="widget-title text-center">Course Features</h4>                                 
                            <ul>
                                <li><i class="fa fa-user"></i>&nbsp;<span>Enrolled :</span> {total_student} students</li>
                                <li><i class="fa fa-clock-o"></i>&nbsp;<span>Duration :</span> {total_duration} hours</li>
                                <li><i class="fa fa-clipboard"></i>&nbsp;<span>Lectures :</span> {total_lecture}</li>
                                <li><i class="fa fa-clone"></i>&nbsp;<span>Categories:</span> Technology</li>
                                <li><i class="fa fa-tags"></i>&nbsp;<span>Tags:</span> Android, JavaScript</li>
                                <li><i class="fa fa-clipboard"></i>&nbsp;<span>Instructor:</span> Ethan Dean</li>
                            </ul>
                            <div class="price-wrap text-center">
                                <h5>Price:<span>$54.00</span></h5>
                                <a class="btn btn-warning btn-radius p-2" href="#"><b>ENROLL COURSE</b></a>
                            </div>

                </div>
                </Col>
            </Row>
        </Container>

        <Container>
            <Row>
                <Col lg={6} md={6} sm={12}>
                <h1 className='courseDetailsText'>Skill You Need!</h1>
                <hr />

                <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />  Requirement Gathering</p>
                <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />System Analysis</p>
                <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />Coding Testing</p>
                <p className='cardSubTitle text-justify'><FontAwesomeIcon className='iconBullent' icon={faCheckSquare} />Implementation</p>

                </Col>
                <Col lg={6} md={6} sm={12}>
                <Player src={video_url}>
                    <BigPlayButton position="center" />
                    </Player>
                </Col>
            </Row>
        </Container>
        
      </Fragment>
    )
  }
}

export default CourseDetails

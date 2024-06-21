import React, { Component, Fragment } from 'react';
import { Col, Container, Row } from 'react-bootstrap';
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import { Link } from 'react-router-dom';
import Loading from '../Loading/Loading';

 class ClientReview extends Component {

  constructor() {
    super()
  
    this.state = {
        myData: [],
        loading:true
        
    }
  }
  

 componentDidMount(){

  RestClient.GetRequest(AppUrl.ClientReviewAll).then(result=>{
      this.setState({myData:result,loading:false}); 
  });

 }
  render() {

    if(this.state.loading == true){
      return <Loading/>
  }else{

  

    var settings = {
        autoPlay:true,
        autoPlaySpeed:3000,
        dots: true,
        infinite: true,
        speed: 3000,
        arrows:false,
        vertical:true,
        verticalSwiping:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        initialSlide: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              initialSlide: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      };

      const Mylist = this.state.myData;
      const MyView = Mylist.map(Mylist=>{
  
          return     <div>
          <Row className='text-center justify-content-center'>
              <Col lg={6} md={6} sm={12}>
                  <img className='circleImg' src={Mylist.client_img} alt="" />
                  <h2 className='clientName'>{Mylist.client_name}</h2>
                  <p className='clientDes'>{Mylist.client_desc}</p>
              </Col>
          </Row>
         </div>
      });


    return (
      <Fragment>
        <Container fluid={true} className='sliderBack p-1'>
        <h2 className='reviewMainTitle text-center'>Testimonials</h2>
            <div className='reviewbottom'></div>
            <Slider {...settings}>
           

           {MyView}
            </Slider>
        </Container>
        
      </Fragment>
    )
  }
  }
}

export default ClientReview

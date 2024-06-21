import React, { Component,Fragment } from 'react';
import '../../assets/css/custom.css';
import '../../assets/css/bootstrap.min.css';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import { Link } from 'react-router-dom';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import Loading from '../Loading/Loading';

 class Courses extends Component {

    constructor() {
        super()
      
        this.state = {
            myData: [],
            loading:true
            
        }
      }
      
    
     componentDidMount(){
    
      RestClient.GetRequest(AppUrl.HomeCourse).then(result=>{
          this.setState({myData:result, loading:false}); 
      });
    
     }


  render() {
    if(this.state.loading == true){
      return <Loading/>
  }else{
    const Mylist = this.state.myData;
    const MyView = Mylist.map(Mylist=>{

        return    <Col lg={6} md={12} sm={12}>
        <Row>
            <Col lg={6} md={6} sm={12}>
                <img className='courseImg' src={Mylist.small_img} />
            </Col>

            <Col lg={6} md={6} sm={12}>
                <h5 className="text-justify serviceName">{Mylist.short_title}</h5>
                <p className="text-justify  serviceDes">{Mylist.short_desc}</p>
                <Link to={"/coursedetails/"+Mylist.id+'/'+Mylist.short_title} className='btn btn-primary'>View Details</Link>

                
            </Col>
        </Row>
    
    </Col>
            

          })

    return (
      <Fragment>
        <Container className='text-center'>
        <h2 className='serviceMainTitle text-center'>All Courses</h2>
            <div className='bottom'></div>
            <Row>
                
              {MyView}
              
            </Row>
        </Container>
        
      </Fragment>
    )
  }
  }
}

export default Courses

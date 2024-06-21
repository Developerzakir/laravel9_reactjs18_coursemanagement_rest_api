import React, { Component,Fragment } from 'react';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import '../../assets/css/custom.css';
import '../../assets/css/bootstrap.min.css';
import { BarChart, Bar, ResponsiveContainer,XAxis,Tooltip } from 'recharts';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import { Link } from 'react-router-dom';
import Loading from '../Loading/Loading';


 class Analysis extends Component {

  constructor() {
    super()
  
    this.state = {
        myData: [],
        techDesc: '....',
        loading:true
        
    }
  }
  

 componentDidMount(){

  RestClient.GetRequest(AppUrl.Chartdata).then(result=>{
      this.setState({myData:result}); 
  });

  RestClient.GetRequest(AppUrl.HomeTch).then(result=>{
      this.setState({techDesc:result[0]['tech_desc'],loading:false}); 
  });

 }


  render() {
    if(this.state.loading == true){
      return <Loading/>
  }else{
          
    var blue = '#051b35'
    return (
      <Fragment>

        <Container className='text-center'>
        <h2 className='serviceMainTitle text-center'>TECHNOLOGY USED</h2>
            <div className='bottom'></div>
            <Row>
                <Col style={{ height:'300px'}} lg={6} md={12} sm={12}>
                    <ResponsiveContainer width="100%" height="100%">
                        <BarChart width={100} height={300} data={this.state.myData}>
                        <XAxis dataKey="x_data" />
                        <Tooltip />
                           <Bar dataKey="y_data" fill={blue} />
                        </BarChart>
                    </ResponsiveContainer>
                </Col>

                <Col lg={6} md={12} sm={12}>
                <p className=' text-justify serviceDes'>
                  {this.state.techDesc}
                </p>
                </Col>
            </Row>
            
        </Container>
        
      </Fragment>
    )
  }
  }
}

export default Analysis

import React, { Component, Fragment } from 'react';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import '../../assets/css/custom.css';
// import '../../assets/css/bootstrap.min.css';
import { Link } from 'react-router-dom';
import RestClient from '../../RestApi/RestClient';
import AppUrl from './../../RestApi/AppUrl';
import Loading from '../Loading/Loading';

 class RecentProject extends Component {

  constructor() {
    super()
  
    this.state = {
        myData: [],
        loading:true
        
    }
  }
  

 componentDidMount(){

  RestClient.GetRequest(AppUrl.HomeProject).then(result=>{
      this.setState({myData:result,loading:false}); 
  });

 }



  render() {
    if(this.state.loading == true){
      return <Loading/>
  }else{

    const Mylist = this.state.myData;
    const MyView = Mylist.map(Mylist=>{

        return     <Col lg={4} md={6} sm={12}>
        <Card className='projectCard'>
                <Card.Img variant="top" src={Mylist.img_one} />
                <Card.Body>
                    <Card.Title className='serviceName'>{Mylist.project_name}</Card.Title>
                    <Card.Text className='serviceDes'>
                    {Mylist.project_desc}
                    </Card.Text>
                    <Button variant="primary"><Link to={"/projectdetails/"+Mylist.id+'/'+Mylist.project_name} className='text-light text-decoration-none'>Visit Site</Link> </Button>
                </Card.Body>
                </Card>
        </Col>
            

          })

    return (
      <Fragment>
        <Container className='recent-project text-center'>
        <h2 className='serviceMainTitle text-center'>Recent Project</h2>
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

export default RecentProject

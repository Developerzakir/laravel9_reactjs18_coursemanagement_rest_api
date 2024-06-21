import React, { Component, Fragment } from 'react'
import TopNavigation from '../components/TopNavigation/TopNavigation';
import PageTop from '../components/PageTop/PageTop';
import ProjectDetails from '../components/ProjectDetails/ProjectDetails';
import Footer from '../components/Footer/Footer';



import { useParams } from 'react-router-dom';

// Higher-Order Component to pass route params to class component
function withRouter(Component) {
  return function(props) {
    const params = useParams();
    return <Component {...props} params={params} />;
  }
}



 class ProjectDetailsPage extends Component {

  constructor(props) {
    super(props);
  
    this.state = {
      projectBasedId: props.params.projectId,
      projectBasedName: props.params.projectName,
       
    }
  }
  



  componentDidMount(){
    window.scroll(0,0)
  }
  render() {
    return (
      <Fragment>

        <TopNavigation title="Project Details" />
        <PageTop  pageTitle={this.state.projectBasedName}  />
        <ProjectDetails id={this.state.projectBasedId} />
        <Footer />
        
      </Fragment>
    )
  }
}

// export default ProjectDetailsPage;
export default withRouter(ProjectDetailsPage);

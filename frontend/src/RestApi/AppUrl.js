

class AppUrl{

    static BaseURL = 'http://127.0.0.1:8000/api';

    static HomeTopTitle = this.BaseURL+ '/home/title/subtitle';
    static HomeTch = this.BaseURL+ '/home/tech';
    static HomeTotalStuCourse = this.BaseURL+ '/home/total/student/course';
    static HomeVideo = this.BaseURL+ '/home/video';



    static HomeProject    = this.BaseURL+ '/project-home';
    static ProjectAll = this.BaseURL+ '/project-all';
    static ProjectDetails = this.BaseURL+ '/project-details/';

    static HomeServiceAll = this.BaseURL+ '/services-data-all';
    static HomeInformationAll = this.BaseURL+ '/information-data-all';
    static HomeFooterAll = this.BaseURL+ '/footer-data-all';


    static HomeCourse = this.BaseURL+ '/course-home';
    static CourseAll = this.BaseURL+ '/course-all';
    static CourseDetails = this.BaseURL+ '/course-details/';

    static ContactSend = this.BaseURL+ '/contact-send';
    static ClientReviewAll = this.BaseURL+ '/client-review-all';
    static Chartdata = this.BaseURL+ '/chartdata';




 
  }
  
  export default AppUrl
  
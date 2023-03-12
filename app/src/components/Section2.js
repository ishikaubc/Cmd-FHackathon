import './Section2.css'

function Section2() {
    return (
        <div>
        <div className='section'>
            <div className="new-container">
                <div className = "grid-container">
                    <div className = "video" > video </div>
                        <div className = "about" id='about'> 
                            what is our mission?
                            what is our goal?
                        </div>
                        <div className = "guidelines" id = "guidelines">
                                how to use 
                        </div>
                            <div className = "tips" id = "tips">
                                important tips
                            </div>
                        </div>
                        <p className ="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
                        <ul>
                            <li>Clickable nav links that smooth scroll to page sections</li>
                            <li>Responsive behavior when clicking nav links perfect for a one page website</li>
                            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
                            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
                        </ul>
                </div>
            </div>
            <div className='section'>
                <div className="new-container" id="registration">
                        <h2>Registration</h2>
                        <div className="registration">
                            <a href="">Find a donor</a>
                            <a href="">Become a donor</a>
                        </div>
            </div>
            </div>
            <div className='blog-overview'>
                <div class="new-container" id="blog-overview">
                        <h2>Overview of Blog</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                </div>
            </div>
            <div className='section'>

                <div className="new-container" id="contact">
                <h2>Contact us</h2>
                <p className="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                </div>
            </div>
            </div>
    );
}

export default Section2;
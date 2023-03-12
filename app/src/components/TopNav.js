import './TopNav.css'

function TopNav() {
    return (
    <nav className="hold">
        <a className="title" href="#page-top">LifeConnect</a>
        <input type = 'text' id = "search" className = "search-bar" placeholder="Search"></input>
        <div className="sidehold">
                <a className="nav-link" href="">Blog</a>
                <a className="nav-link" href="">Forum</a>
                <a className="nav-link" href="">Sign up</a>
        </div>
    </nav>
    );
}

export default TopNav;

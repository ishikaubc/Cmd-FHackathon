import './TopNav.css'

function TopNav() {
    return (
    <nav className="hold">
        <a className="title" href="#page-top">LifeConnect</a>
        <input type = 'text' id = "search" className = "search-bar" placeholder="Search"></input>
        <div className="sidehold">
                <a className="nav-link" href="blog">Blog</a>
                <a className="nav-link" href="">Sign Up as User</a>
                <a className="nav-link" href="">Sign Up as Donor</a>
                <a className="nav-link" href="">Login as User</a>
                <a className="nav-link" href="">Login as Donor</a>
        </div>
    </nav>
    );
}

export default TopNav;

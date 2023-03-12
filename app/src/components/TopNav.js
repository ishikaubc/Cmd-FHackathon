import { useState } from "react";
import $ from "jquery";
import './TopNav.css'

function TopNav() {

    const [name, setName] = useState("");
    const [result, setResult] = useState("");
  
    const handleChange = (e) => {
        setName(e.target.value);
    };
  
    const handleSumbit = (e) => {
        e.preventDefault();
        const form = $(e.target);
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
            success(data) {
                setResult(data);
            },
        });
    };

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
        <form
                action="signupuser.inc.php"
                method="post"
                onSubmit={(event) => handleSumbit(event)}
        >
                <input
                    type="text"
                    id="name"
                    name="name"
                    value={name}
                    onChange={(event) => handleChange(event)}
                />
                <br />
                <button type="submit">Submit</button>
        </form>
    </nav>
    );
}

export default TopNav;

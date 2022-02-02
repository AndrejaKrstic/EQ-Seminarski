import React from "react";
import axios from "axios";
//import { Outlet } from "react-router-dom";
import { useNavigate, Navigate, Link } from "react-router-dom";
import { useEffect, useState } from "react/cjs/react.development";

function MenuBar({ vezbanjeID, isAdmin }) {
  let navigate = useNavigate();
  function handleLogout(e) {
    clearInterval(intervalId);
    var config = {
      method: "post",
      url: "logout",
      headers: {
        Authorization: "Bearer " + window.sessionStorage.getItem("auth_token"),
      },
    };
    axios(config).then((res) => {
      console.log(res.data);
      window.sessionStorage.setItem("auth_token", null);
      window.sessionStorage.setItem("imePrezime", null);
      window.sessionStorage.setItem("id", null);
    });

    navigate("/login");
    e.preventDefault();
  }
  useEffect(() => {
    if (window.sessionStorage.getItem("auth_token") == "null") {
      clearInterval(intervalId);

      navigate("/login");
    }
  });

  var intervalId = window.setInterval(function () {
    axios
      .get("http://worldtimeapi.org/api/timezone/Europe/Belgrade")
      .then((res) => {
        var mySubString = res.data.datetime.substring(
          res.data.datetime.indexOf("T") + 1,
          res.data.datetime.lastIndexOf(".")
        );
        document.getElementsByClassName("txt-time-api")[0].innerHTML =
          mySubString;
      })
      .catch((e) => console.log(e));
  }, 1000);

  return (
    <>
      {window.sessionStorage.getItem("auth_token") == null ? (
        <Navigate to={"/login"} />
      ) : (
        <>
          {vezbanjeID == 1 ? (
            <h3 className="txt-naziv-level">Vežbanje roda</h3>
          ) : (
            <></>
          )}
          {vezbanjeID == 2 ? (
            <h3 className="txt-naziv-level">Vežbanje prevoda</h3>
          ) : (
            <></>
          )}
          {isAdmin == 0 ? (
            <>
              <span className="circle-home-1"></span>
              <span className="circle-home-2"></span>
              <span className="circle-home-3"></span>
              <nav
                className="navbar navbar-expand-xl navbar-dark"
                style={{ zIndex: 200 }}
              >
                <div className="container-fluid">
                  <Link
                    to="/"
                    className="navbar-brand"
                    href="/"
                    style={{ color: "#0077b6" }}
                  >
                    EQ
                  </Link>
                  <button
                    className="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarWithDropdown"
                    aria-controls="navbarWithDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span className="navbar-toggler-icon navbar-dark"></span>
                  </button>
                  <div
                    className="collapse navbar-collapse"
                    id="navbarWithDropdown"
                  >
                    <ul className="navbar-nav">
                      <li className="nav-item dropdown">
                        <a
                          className="dropdown-toggle"
                          href="#"
                          id="navbarDropdownMenuLink"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Vežbanje
                        </a>

                        <ul
                          style={{ backgroundColor: "#76c893" }}
                          className="dropdown-menu"
                          aria-labelledby="navbarDropdownMenuLink"
                        >
                          <li>
                            <Link
                              to="/izbor-nivoa/1"
                              className="dropdown-item"
                              href="/izbor-nivoa"
                            >
                              Vežbanje roda &gt;
                            </Link>
                          </li>
                          <li>
                            <Link
                              to="/izbor-nivoa/2"
                              className="dropdown-item"
                              href="/izbor-nivoa"
                            >
                              Vezbanje prevoda &gt;
                            </Link>
                          </li>
                        </ul>
                      </li>
                      <li className="nav-item">
                        <Link
                          to="/moj-napredak"
                          className="item-napredak"
                          aria-current="page"
                          href="/moj-napredak"
                        >
                          Moj napredak
                        </Link>
                      </li>
                      <li className="nav-item">
                        <div className="div-time-api">
                          <p className="txt-time-api"></p>
                        </div>
                      </li>

                      <li className="nav-item dropdown name-item">
                        <a
                          className="dropdown-toggle name-link"
                          href="#"
                          id="navbarDropdownMenuLink"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          {!window.sessionStorage.getItem("imePrezime") ? (
                            <></>
                          ) : (
                            window.sessionStorage.getItem("imePrezime")
                          )}
                        </a>
                        <ul
                          className="dropdown-menu"
                          aria-labelledby="navbarDropdownMenuLink"
                          style={{ backgroundColor: "#76c893" }}
                        >
                          <li>
                            <Link to="/moj-nalog" className="dropdown-item">
                              Moj nalog
                            </Link>
                          </li>
                          <li>
                            <a
                              className="dropdown-item"
                              onClick={handleLogout}
                              href="/login"
                            >
                              Logout
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </>
          ) : (
            <>
              <span className="circle-home-1"></span>
              <span className="circle-home-2"></span>
              <span className="circle-home-3"></span>
              <nav
                className="navbar navbar-expand-xl navbar-dark"
                style={{ zIndex: 200 }}
              >
                <div className="container-fluid">
                  <Link
                    to="/"
                    className="navbar-brand"
                    href="/"
                    style={{ color: "#0077b6" }}
                  >
                    EQ
                  </Link>
                  <button
                    className="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarWithDropdown"
                    aria-controls="navbarWithDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span className="navbar-toggler-icon navbar-dark"></span>
                  </button>
                  <div
                    className="collapse navbar-collapse"
                    id="navbarWithDropdown"
                  >
                    <ul className="navbar-nav">
                      <li className="nav-item">
                        <div className="div-time-api">
                          <p className="txt-time-api"></p>
                        </div>
                      </li>

                      <li
                        className="nav-item dropdown name-item"
                        style={{ top: 1.5 + "vw" }}
                      >
                        <a
                          className="dropdown-toggle name-link"
                          href="#"
                          id="navbarDropdownMenuLink"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          {!window.sessionStorage.getItem("imePrezime") ? (
                            <></>
                          ) : (
                            window.sessionStorage.getItem("imePrezime")
                          )}
                        </a>
                        <ul
                          className="dropdown-menu"
                          aria-labelledby="navbarDropdownMenuLink"
                          style={{ backgroundColor: "#76c893" }}
                        >
                          <li>
                            <Link to="/moj-nalog" className="dropdown-item">
                              Moj nalog
                            </Link>
                          </li>
                          <li>
                            <a
                              className="dropdown-item"
                              onClick={handleLogout}
                              href="/login"
                            >
                              Logout
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </>
          )}
        </>
      )}
    </>
  );
}

export default MenuBar;

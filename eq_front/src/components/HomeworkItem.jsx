import React from "react";
import logo from "./bin.png";
import axios from "axios";
import { Link } from "react-router-dom";
import { useState, useEffect } from "react";

function HomeworkItem({ homework, isAdmin, refreshHomeworks }) {
  function handleShowHomeworkItem() {
    if (
      document.getElementsByClassName(
        `div-homework-body${homework.id_domaceg}`
      )[0].style.display == "block"
    ) {
      document.getElementsByClassName(
        `div-homework-body${homework.id_domaceg}`
      )[0].style.display = "none";
    } else {
      document.getElementsByClassName(
        `div-homework-body${homework.id_domaceg}`
      )[0].style.display = "block";
    }
  }
  function handleDeleteHomework() {
    var config = {
      method: "delete",
      url: "domaci/" + homework.id_domaceg,
      headers: {
        Authorization: "Bearer " + window.sessionStorage.getItem("auth_token"),
      },
    };
    axios(config).then(() => {
      refreshHomeworks();
    });
  }
  return(
    <>
<div className="div-homework-item">
        <button
          className="btn-show-homework-item"
          onClick={handleShowHomeworkItem}
        >
          {homework.naziv_domaceg}
        </button>
        {isAdmin == 2 ? (
          <>
            <button
              style={{ borderStyle: "none", backgroundColor: "transparent" }}
              onClick={handleDeleteHomework}
            >
              <img src={logo} style={{ width: 20 + "px" }} />
            </button>
          </>
        ) : (
          <></>
        )}
        <div
          className={`div-homework-body${homework.id_domaceg}`}
          style={{ display: "none" }}
        >
          <p>
            <span style={{ color: "red" }}>Zadatak: </span>
            {homework.domaci_zadatak}
          </p>
          <p>
            <span style={{ color: "red" }}>Rok izrade: </span>
            {homework.rok_izrade}
          </p>
          <p>
            <span style={{ color: "red" }}>Zadatak postavio: </span>
            {homework.domaci_postavio}
          </p>
        </div>
      </div>
    </>
  );
}

export default HomeworkItem;

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
  return();
}

export default HomeworkItem;

import React from "react";
import { useState, useEffect } from "react";
import axios from "axios";
import HomeworksStudent from "./HomeworksStudent";

function MainMenu({ isAdmin }) {
  document.body.style.overflowY = "auto";
  return (
    <>
      <div className="div-welcome">
        <h2 className="txt-welcome">Dobrodošli</h2>
      </div>
      <div className="div-student-menu">
        <h4>Domaći zadaci</h4>
        <div className="div-student-homework">
          <HomeworksStudent isAdmin={isAdmin} />
        </div>
      </div>
    </>
  );
}

export default MainMenu;

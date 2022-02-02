import React from "react";
import axios from "axios";
import { useState, useEffect } from "react";
import HomeworkItem from "./HomeworkItem";

function HomeworksProf({ isAdmin, HomeworkList, refreshHomeworks }) {
  useEffect(() => {
    if (HomeworkList == null) {
      var config = {
        method: "get",
        url: "domaci",
        headers: {
          Authorization:
            "Bearer " + window.sessionStorage.getItem("auth_token"),
        },
      };
      axios(config).then((res) => {
        refreshHomeworks();
      });
    }
  }, [HomeworkList]);
  console.log(HomeworkList);
  return (
    <>
      {HomeworkList == null || HomeworkList.length === 0 ? (
        <>
          <div>
            <h3>Nema domaćih</h3>
          </div>
        </>
      ) : (
        HomeworkList.map((homework) => (
          <>
            <HomeworkItem
              homework={homework}
              key={homework.id_domaceg}
              isAdmin={isAdmin}
              refreshHomeworks={refreshHomeworks}
            />
          </>
        ))
      )}
    </>
  );
}

export default HomeworksProf;

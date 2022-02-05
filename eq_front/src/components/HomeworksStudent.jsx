import React from "react";
import { useState, useEffect } from "react";
import axios from "axios";
import HomeworkItem from "./HomeworkItem";

function HomeworksStudent({ isAdmin }) {
  const [HomeworkList, setHomeworkList] = useState();
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
        setHomeworkList(res.data);
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
            />
          </>
        ))
      )}
    </>
  );
}

export default HomeworksStudent;

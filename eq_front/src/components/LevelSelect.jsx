import React from "react";
import axios from "axios";
import { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";

function LevelSelect({ selektujLevel, vezbanjeID }) {
  const[levelsDone,setLevelsDone]=useState(null);
  const[data,setData]=useState({
    naziv_vezbanja:""
  });
  switch(vezbanjeID){
    case 1:
      data.naziv_vezbanja="Vežbanje roda";
      break;
    case 2:
      data.naziv_vezbanja="Vežbanje prevoda";
      break;
  }
  useEffect(()=>{
    if(levelsDone!=null){
      var config = {
        method:"post",
        url:"levels",
        headers:{
          Authorization:"Bearer "+window.sessionStorage.getItem("auth_token"),
        },
        data:data,
      };
      console.log(data.naziv_vezbanja);
      axios(config).then((res)=>{
        setLevelsDone(res.data);
      });
    }
  },[levelsDone]);
  console.log(levelsDone);
  useEffect(()=>{
    if(levelsDone!=null){
        for(let x=0;x<levelsDone.length;x++){
        document.getElementById("btn-level-"+levelsDone[x]).style.color="#0077b6";
        console.log("adadaada");
      }
    }
    //setLevelsDone(null);

  });
  let level;
  let navigate = useNavigate();
  function handleLevel(number) {
    level = number;
    console.log(level);
    selektujLevel(level);
    console.log(vezbanjeID);
    switch (vezbanjeID) {
      case 1:
        navigate("/vezbanje-roda");
        break;
      case 2:
        navigate("/vezbanje-prevoda");
        break;
    }
  }

  return (
    <>
      <div className="div-levels" id="div-levels">
        <div id="level-1">
          <button className="button-level" id="btn-level-1" onClick={() => handleLevel(1)}>
            Nivo 1
          </button>
        </div>
        <div id="level-2">
          <button className="button-level" id="btn-level-2" onClick={() => handleLevel(2)}>
            Nivo 2
          </button>
        </div>
        <div id="level-3">
          <button className="button-level" id="btn-level-3" onClick={() => handleLevel(3)}>
            Nivo 3
          </button>
        </div>
        <div id="level-4">
          <button className="button-level" id="btn-level-4" onClick={() => handleLevel(4)}>
            Nivo 4
          </button>
        </div>
        <div id="level-5">
          <button className="button-level" id="btn-level-5" onClick={() => handleLevel(5)}>
            Nivo 5
          </button>
        </div>
        <div id="level-6">
          <button className="button-level" id="btn-level-6" onClick={() => handleLevel(6)}>
            Nivo 6
          </button>
        </div>
        <div id="level-7">
          <button className="button-level" id="btn-level-7" onClick={() => handleLevel(7)}>
            Nivo 7
          </button>
        </div>
        <div id="level-8">
          <button className="button-level" id="btn-level-8" onClick={() => handleLevel(8)}>
            Nivo 8
          </button>
        </div>
      </div>
    </>
  );
}

export default LevelSelect;

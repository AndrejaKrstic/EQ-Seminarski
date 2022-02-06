import React from "react";
import { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import Box from "@mui/material/Box";
import Button from "@mui/material/Button";
import Typography from "@mui/material/Typography";
import Modal from "@mui/material/Modal";
import HomeworksProf from "./HomeworksProf";

const style = {
  color: "white",
  position: "absolute",
  top: "50%",
  left: "50%",
  transform: "translate(-50%, -50%)",
  width: 400,
  bgcolor: "#76c893",
  borderStyle: "none",
  boxShadow: 24,
  p: 4,
  borderRadius: 10 + "px",
};

function ProfMenu({ isAdmin }) {
  const [HomeworkList, setHomeworkList] = useState();
  function refreshHomeworks() {
    var config = {
      method: "get",
      url: "domaci",
      headers: {
        Authorization: "Bearer " + window.sessionStorage.getItem("auth_token"),
      },
    };
    axios(config).then((res) => {
      setHomeworkList(res.data);
    });
  }
  document.body.style.overflowY = "auto";
  const [open, setOpen] = React.useState(false);
  const handleOpen = () => setOpen(true);
  const handleClose = () => setOpen(false);
  const [userData, setUserData] = useState({
    naziv_domaceg: "",
    domaci_zadatak: "",
    rok_izrade: "",
    naziv_jezika: "",
    nivo: "",
  });
  let navigate = useNavigate();
  function handleInput(e) {
    let newUserData = userData;
    newUserData[e.target.name] = e.target.value;
    setUserData(newUserData);
  }
  function handleHomeWorkAdd(e) {
    e.preventDefault();
    var config = {
      method: "post",
      url: "domaci",
      headers: {
        Authorization: "Bearer " + window.sessionStorage.getItem("auth_token"),
      },
      data: userData,
    };
    axios(config)
      .then((res) => {
        refreshHomeworks();
        document.getElementsByClassName("form-register")[0].reset();
        document.getElementsByClassName(
          "div-prof-add-homework"
        )[0].style.display = "none";
        document.getElementById("naziv_jezika").value = "";
        document.getElementById("nivo").value = "";
        handleOpen();
        setTimeout(function () {
          handleClose();
        }, 1000);
      })
      .catch(() => console.log(e));
  }
  function showAddHomework() {
    if (
      document.getElementsByClassName("div-prof-add-homework")[0].style
        .display == "block"
    ) {
      document.getElementsByClassName(
        "div-prof-add-homework"
      )[0].style.display = "none";
    } else {
      document.getElementsByClassName(
        "div-prof-add-homework"
      )[0].style.display = "block";
    }
  }
  function showDeleteHomework() {
    if (
      document.getElementsByClassName("div-prof-delete-homework")[0].style
        .display == "block"
    ) {
      document.getElementsByClassName(
        "div-prof-delete-homework"
      )[0].style.display = "none";
    } else {
      document.getElementsByClassName(
        "div-prof-delete-homework"
      )[0].style.display = "block";
    }
  }
  return (
    <>
      <div className="div-prof">
        <h4 className="txt-rad-sa-domacim">Rad sa domaćim</h4>
        <button className="btn-prof-show-addHomework" onClick={showAddHomework}>
          Dodaj novi domaći
        </button>
        <br />

        <button
          className="btn-prof-delete-homework"
          onClick={showDeleteHomework}
        >
          Obriši domaći
        </button>
        <div className="div-prof-delete-homework" style={{ display: "none" }}>
          <HomeworksProf
            isAdmin={isAdmin}
            setHomeworkList={setHomeworkList}
            HomeworkList={HomeworkList}
            refreshHomeworks={refreshHomeworks}
          />
        </div>
      </div>

      <div>
        <Modal
          open={open}
          onClose={handleClose}
          aria-labelledby="modal-modal-title"
          aria-describedby="modal-modal-description"
        >
          <Box sx={style}>
            <Typography id="modal-modal-title" variant="h6" component="h2">
              Uspešno dodat zadatak!
            </Typography>
          </Box>
        </Modal>
      </div>
    </>
  );
}

export default ProfMenu;

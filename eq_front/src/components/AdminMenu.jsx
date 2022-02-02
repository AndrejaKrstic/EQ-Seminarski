import React from "react";
import { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import Box from "@mui/material/Box";
import Button from "@mui/material/Button";
import Typography from "@mui/material/Typography";
import Modal from "@mui/material/Modal";

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

function AdminMenu() {
  const [open, setOpen] = React.useState(false);
  const handleOpen = () => setOpen(true);
  const handleClose = () => setOpen(false);
  const [userData, setUserData] = useState({
    ime: "",
    prezime: "",
    korisnicko_ime: "",
    naziv_jezika: "",
    nivo: "",
    password: "",
    isProf: 1,
  });
  let navigate = useNavigate();
  function handleInput(e) {
    let newUserData = userData;
    newUserData[e.target.name] = e.target.value;
    setUserData(newUserData);
  }
  function handleProfAdd(e) {
    e.preventDefault();
    axios
      .post("register", userData)
      .then((res) => {
        console.log(res.data);
        if (
          res.data.korisnicko_ime ==
          "The korisnicko ime has already been taken."
        ) {
          document.getElementById("input-korisnicko_ime").value =
            "Korisničko ime zauzeto!";
          document.getElementById("input-korisnicko_ime").style.color = "red";
          setTimeout(function () {
            document.getElementById("input-korisnicko_ime").value = "";
            document.getElementById("input-korisnicko_ime").style.color =
              "black";
          }, 2000);
        } else if (
          res.data.password == "The password must be at least 8 characters."
        ) {
          document.getElementById("input-password-register").style.color =
            "red";
          document.getElementById("input-password-register").type = "name";
          document.getElementById("input-password-register").value =
            "Najmanje 8 karaktera";
          setTimeout(function () {
            document.getElementById("input-password-register").type =
              "password";
            document.getElementById("input-password-register").value = "";
            document.getElementById("input-password-register").style.color =
              "black";
          }, 2000);
        } else {
          document.getElementsByClassName("form-register")[0].reset();
          document.getElementsByClassName(
            "div-admin-dodaj-prof"
          )[0].style.display = "none";
          document.getElementById("naziv_jezika").value = "";
          document.getElementById("nivo").value = "";
          handleOpen();
          setTimeout(function () {
            handleClose();
          }, 2000);
        }
      })
      .catch((e) => console.log(e));
  }
  function showAddProf() {
    if (
      document.getElementsByClassName("div-admin-dodaj-prof")[0].style
        .display == "block"
    ) {
      document.getElementsByClassName("div-admin-dodaj-prof")[0].style.display =
        "none";
    } else {
      document.getElementsByClassName("div-admin-dodaj-prof")[0].style.display =
        "block";
    }
  }
  return (
    <>
      <div className="div-admin-menu">
        <div className="div-admin-rad-sa-prof">
          <h4 className="txt-rad-sa-prof">Rad sa Profesorima</h4>
          <button className="btn-admin-show-profAdd" onClick={showAddProf}>
            Dodaj novog profesora
          </button>
          <div className="div-admin-dodaj-prof">
            <form className="form-register" onSubmit={handleProfAdd}>
              <input
                className="input-name-register"
                type="name"
                required
                name="ime"
                onInput={handleInput}
              />
              <p className="txt-register">Ime</p>
              <input
                className="input-last-name-register"
                type="lastname"
                required
                name="prezime"
                onInput={handleInput}
              />
              <p className="txt-register">Prezime</p>
              <input
                className="input-username-register"
                type="username"
                required
                name="korisnicko_ime"
                onInput={handleInput}
                id="input-korisnicko_ime"
              />
              <p className="txt-register">Korisničko ime</p>
              <div className="row">
                <div className="col-md-6">
                  <select
                    name="naziv_jezika"
                    id="naziv_jezika"
                    className="select-language"
                    required
                    onChange={handleInput}
                  >
                    <option value="nemacki" disabled selected hidden></option>
                    <option value="Nemački">Nemački</option>
                  </select>
                  <p className="txt-register">Jezik</p>
                </div>
                <div className="col-md-6">
                  <select
                    name="nivo"
                    id="nivo"
                    className="select-language"
                    required
                    onChange={handleInput}
                  >
                    <option value="A1.1" disabled selected hidden></option>
                    <option value="A1.1">A1.1</option>
                  </select>
                  <p className="txt-register">Nivo</p>
                </div>
              </div>
              <input
                className="input-password-register"
                type="password"
                required
                onInput={handleInput}
                name="password"
                id="input-password-register"
              />
              <p className="txt-register">Lozinka</p>
              <button className="btn-admin-addProf" type="submit">
                Dodaj profesora
              </button>
            </form>
          </div>
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
              Uspešno dodat profesor!
            </Typography>
          </Box>
        </Modal>
      </div>
    </>
  );
}

export default AdminMenu;

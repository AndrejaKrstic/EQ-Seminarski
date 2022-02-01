//import logo from "./logo.svg";
import "./App.css";
import Login from "./components/Login";
import Register from "./components/Register";
import MenuBar from "./components/MenuBar";
import { BrowserRouter, Routes, Route, Navigate } from "react-router-dom";
import { useState, useEffect } from "react";
import VezbanjeRoda from "./components/VezbanjeRoda";
import LevelSelect from "./components/LevelSelect";
import MainMenu from "./components/MainMenu";
import Progress from "./components/Progress";
import VezbanjePrevoda from "./components/VezbanjePrevoda";
import MojNalog from "./components/MojNalog";
import AdminMenu from "./components/AdminMenu";

function App() {
  const [level, setLevel] = useState();
  function selektujLevel(level) {
    setLevel(level);
  }
  const [isAdmin, setIsAdmin] = useState();
  function selektujAdmina(isAdmin) {
    setIsAdmin(isAdmin);
    console.log(isAdmin);
  }
  return (
    <BrowserRouter className="App">
      <Routes>
        <Route
          path="/login"
          element={<Login selektujAdmina={selektujAdmina} />}
        />
        <Route path="/register" element={<Register />} />
        <Route
          path="/"
          element={
            <>
              <MenuBar isAdmin={isAdmin} />
              {isAdmin == 0 ? <MainMenu /> : <AdminMenu />}
            </>
          }
        />
        <Route
          path="/izbor-nivoa/1"
          element={
            <>
              <MenuBar isAdmin={isAdmin} vezbanjeID={1} />
              <LevelSelect
                selektujLevel={selektujLevel}
                vezbanjeID={1}
                key={1}
              />
            </>
          }
        />
        <Route
          path="/izbor-nivoa/2"
          element={
            <>
              <MenuBar isAdmin={isAdmin} vezbanjeID={2} />
              <LevelSelect
                selektujLevel={selektujLevel}
                vezbanjeID={2}
                key={2}
              />
            </>
          }
        />
        <Route
          path="/vezbanje-roda"
          element={
            <>
              <MenuBar isAdmin={isAdmin} />
              <VezbanjeRoda level={level} />
            </>
          }
        />
        <Route
          path="/moj-napredak"
          element={
            <>
              <MenuBar isAdmin={isAdmin} />
              <Progress />
            </>
          }
        />
        <Route
          path="/vezbanje-prevoda"
          element={
            <>
              <MenuBar isAdmin={isAdmin} />
              <VezbanjePrevoda level={level} />
            </>
          }
        />
        <Route
          path="/moj-nalog"
          element={
            <>
              <MenuBar isAdmin={isAdmin} />
              <MojNalog />
            </>
          }
        />
        <Route path="*" element={<Navigate to="/" replace />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;

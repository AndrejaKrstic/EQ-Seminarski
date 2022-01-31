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

function App() {
  const [level, setLevel] = useState();
  function selektujLevel(level) {
    setLevel(level);
  }
  return (
    <BrowserRouter className="App">
      <Routes>
        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Register />} />
        <Route
          path="/"
          element={
            <>
              <MenuBar /> <MainMenu />
            </>
          }
        />
        <Route
          path="/izbor-nivoa/1"
          element={
            <>
              <MenuBar />
              <LevelSelect selektujLevel={selektujLevel} vezbanjeID={1} />
            </>
          }
        />
        <Route
          path="/izbor-nivoa/2"
          element={
            <>
              <MenuBar />
              <LevelSelect selektujLevel={selektujLevel} vezbanjeID={2} />
            </>
          }
        />
        <Route
          path="/vezbanje-roda"
          element={
            <>
              <MenuBar />
              <VezbanjeRoda level={level} />
            </>
          }
        />
        <Route
          path="/moj-napredak"
          element={
            <>
              <MenuBar />
              <Progress />
            </>
          }
        />
        <Route
          path="/vezbanje-prevoda"
          element={
            <>
              <MenuBar />
              <VezbanjePrevoda level={level} />
            </>
          }
        />
        <Route
          path="/moj-nalog"
          element={
            <>
              <MenuBar />
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

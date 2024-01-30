import React from "react";
import "./compo/homecompo.ts";
import { Curosal, Service, LatestItem, HomePageHelmet, HomePageBike, HomePageThreeWheel } from "./compo/homecompo.ts";

export const HomePage = () => {
  return (
    <>
      <Curosal />{/* cuosal  */}
      <div className="container-fluid">
        <Service />{/* service */}
        <LatestItem />
        <HomePageHelmet />
        <HomePageBike/>
        <HomePageThreeWheel/>
      </div>
    </>
  );
};

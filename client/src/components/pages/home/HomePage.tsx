import React from "react";
import "./compo/homecompo.ts";
import { Curosal, Service, LatestItem, HomePageHelmet, HomePageBike, HomePageThreeWheel, HomePatnership, HomePageCustomer, ContactUs } from "./compo/homecompo.ts";

export const HomePage = () => {
  return (
    <>
      <Curosal />{/* cuosal  */}
      <Service />{/* service */}
      <div className="container-fluid">
        <LatestItem />
        <HomePageHelmet />
        <HomePageBike/>
        <HomePageThreeWheel/>
        <HomePatnership/>
      </div>
      <HomePageCustomer/>
      <ContactUs/>
    </>
  );
};

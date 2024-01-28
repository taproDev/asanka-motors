import React from "react";
import "./compo/homecompo.ts";
import { Curosal , Service ,LatestItem} from "./compo/homecompo.ts";

export const HomePage = () => {
  return (
    <>
      <Curosal />{/* cuosal  */}
      <Service/>{/* service */}
      <LatestItem/>
      
    </>
  );
};

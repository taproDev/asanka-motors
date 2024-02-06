import React, { useEffect, useState } from "react";
import "./compo/homecompo.ts";
import { Loading } from "../../common/loading/Loading.tsx";

import {
  Curosal,
  Service,
  LatestItem,
  HomePageHelmet,
  HomePageBike,
  HomePageThreeWheel,
  HomePatnership,
  HomePageCustomer,
  ContactUs,
} from "./compo/homecompo.ts";
import { fetchHomeProductData } from "../../../api/load-home-product.ts";
import { load_eror } from "../../../utils/load_errror_page.ts";

export const HomePage = () => {
  const [loading, setLoading] = useState(true);
  const [productData, setProductData] = useState(null); // Initially set to null

  useEffect(() => {
    const fetchData = async () => {
      try {
        setLoading(true);
        const data = await fetchHomeProductData();
        await setProductData(data);
      } catch (error) {
        console.error("Error fetching data:", error);
        load_eror()
      }finally{
        setLoading(false);
      }
    };

    fetchData();
  }, []);


  console.log(productData);
  

  return (
    <>
      {loading ? (
        <Loading />
      ) : (
        <>
          <Curosal />
          {/* cuosal  */}
          <Service />
          {/* service */}
          <div className="container-fluid">
            <LatestItem />
            <HomePageHelmet />
            <HomePageBike />
            <HomePageThreeWheel />
            <HomePatnership />
          </div>
          <HomePageCustomer />
          <ContactUs />
        </>
      )}
    </>
  );
};

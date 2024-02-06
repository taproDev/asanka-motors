import React from "react";
import { Itemcard } from "../../../common/item-card/item-card.tsx";

interface IItemData {
  ItemData?: any[];
}

export const LatestItem = (props: IItemData) => {
  return (
    <div className="col-12 my-5">
      <div className="text-center mx-2">
        <h1
          className="text-dark"
          data-aos="fade-down"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          Latest Products
        </h1>
        <p
          className="sub-text fs-6"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          Welcome to our Latest Product Section, where innovation and excellence
          meet to bring you the cutting-edge solutions you've been
          <br />
          waiting for! Explore our newest arrivals, handpicked to elevate your
          experience and cater to your evolving needs.
        </p>
      </div>

      <div className="row">
        <div className="col-12 ">
          <div
            className="row d-flex flex-nowrap flex-md-wrap justify-content-center flex-row text-center pb-4"
            style={{ overflowX: "scroll" }}
          >
            {props.ItemData
                ? props.ItemData.map((data) => (
                    <Itemcard
                      key={data.id}
                      title={data.title}
                      sampleDis={data.sampleDis}
                      price={data.price}
                      productid={data.id}
                      productImage={data.image}
                      type={"row"}
                    />
                  ))
                : null}
          </div>
        </div>
      </div>

      <div className="float-end ">
        <a
          href="#"
          className="btn btn-sm text-primary pe-auto px-3 border-0 rounded bg-light"
          data-aos="fade-left"
          data-aos-duration="800"
          data-aos-delay="200"
          data-aos-once="true"
        >
          see more <i className="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  );
};

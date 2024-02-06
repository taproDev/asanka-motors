import React from "react";
import { ArrowRight } from "react-bootstrap-icons";
import { Itemcard } from "../../../common/item-card/item-card.tsx";
import "./compo.css";

interface IItemData {
  ItemData?: any[];
}

export const HomePageBike = (props: IItemData) => {
  return (
    <div className="">
      <div className="col-12 my-5">
        <div className="my-5 home-page-bike-section">
          <h1
            className="text-dark"
            data-aos="fade-down"
            data-aos-duration="800"
            data-aos-delay="100"
            data-aos-once="true"
          >
            MotorBike Spareparts
          </h1>
          <p
            className="sub-text"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-delay="100"
            data-aos-once="true"
          >
            Welcome to our Latest Product Section, where innovation and
            excellence meet to bring you the cutting-edge solutions you've been
            waiting for! <br /> Explore our newest arrivals, handpicked to
            elevate your experience and cater to your evolving needs.
          </p>
        </div>

        <div className="row">
          <div className="col-1-2 col-md-11 mx-auto">
            <div className="row d-flex flex-wrap  justify-content-center flex-row text-center pb-4">
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
            see more <ArrowRight />{" "}
          </a>
        </div>
      </div>
    </div>
  );
};

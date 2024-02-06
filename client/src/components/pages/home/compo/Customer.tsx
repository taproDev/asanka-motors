import React from "react";
import "./compo.css";

//@ts-ignore
import customer_1 from "../../../../assets/resources/customer-1.jpg";
//@ts-ignore
import customer_2 from "../../../../assets/resources/customer-1.jpg";
//@ts-ignore
import customer_3 from "../../../../assets/resources/customer-1.jpg";

const customerData = [
  {
    img: customer_1,
    name: "First Customer",
    post: "Directret at tapro Dev",
    note: `Welcome to our Latest Product Section, where innovation and
    excellence meet to bring you the cutting-edge solutions you've
    been waiting for! Explore our`,
  },
  {
    img: customer_1,
    name: "Second Customer",
    post: "Directret at tapro Dev",
    note: `Welcome to our Latest Product Section, where innovation and
    excellence meet to bring you the cutting-edge solutions you've
    been waiting for! Explore our`,
  },
  {
    img: customer_1,
    name: "Third Customer",
    post: "Directret at tapro Dev",
    note: `Welcome to our Latest Product Section, where innovation and
    excellence meet to bring you the cutting-edge solutions you've
    been waiting for! Explore our`,
  }
];

export const HomePageCustomer = () => {
  return (
    <div className="col-12 mt-5 ">
      <div className="text-center mx-2">
        <h1
          className="text-dark"
          data-aos="fade-down"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          Customer Testimonials
        </h1>
        <p
          className="sub-text"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="100"
          data-aos-once="true"
        >
          Welcome to our Latest Product Section, where innovation and excellence
          meet to bring you the cutting-edge <br />
          solutions you've been waiting for! Explore our newest arrivals,
          handpicked to elevate your experience and cater to <br />
          your evolving needs.
        </p>
      </div>

      <div className="row">
        <div className="col-12 mx-auto">
          <div className="row d-flex flex-wrap justify-content-center pb-4">
            <div
              className="row col-12 d-flex flex-column justify-content-center flex-md-row mx-auto my-3"
              data-aos="fade-right"
              data-aos-duration="800"
              data-aos-delay="100"
              data-aos-once="true"
            >
              {customerData.map((customer: any) => (
                <div
                  className="d-flex col-12 col-md-4 flex-row row"
                  key={customer.id}
                >
                  <div className="col-12 text-center">
                    <h4 className="fw-bold fs-4 my-2">{customer.name}</h4>
                    <img
                      className="w-100 img-fluid rounded"
                      src={customer.img}
                      alt=""
                    />
                    <p className="fw-bold mt-1">{customer.post}</p>
                    <p className="text-dark-50">
                      Welcome to our Latest Product Section, where innovation
                      and excellence meet to bring you the cutting-edge
                      solutions you've been waiting for! Explore our
                    </p>
                  </div>
                </div>
              ))}
            </div>
            <div>
              <p className="text-center mx-2 mt-3">
                Welcome to our Latest Product Section, where innovation and
                excellence meet to bring you the cutting-edge solutions you've
                been waiting for! Explore our newest arrivals, handpicked to
                elevate your experience and cater to your evolving needs.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

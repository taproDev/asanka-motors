import React from "react";

//@ts-ignore
import contact_image from "../../../../assets/resources/contact-us.jpg";

export const ContactUs = () => {
  return (
    <>
      <div className="col-12" id="contactUs">
        <div className="row">
          <div
            className="text-center col-12  p-3 bg-darker  ps-5 text-uppercase fw-bold mt-5 ff-alumini"
            data-aos="flip-down"
            data-aos-duration="800"
            data-aos-delay="200"
            data-aos-once="true"
          >
            <span className="text-primary fs-1 offset-0">Contact </span>
            <span className="text-red fs-1">us</span>
          </div>

          <div className="col-12 mt-2 d-flex flex-column flex-md-row text-center align-items-center">
            <div className="col-12 col-md-6 d-flex flex-column">
              <img
                src={contact_image}
                className="w-75 mx-auto rounded"
                alt=""
              />
            </div>

            <div className="col-12 col-md-6 px-5 contact-bg">
              <p
                className="dis-para text-dark"
                data-aos="fade-up"
                data-aos-duration="800"
                data-aos-delay="300"
                data-aos-once="true"
              >
                We're always here to assist you with any questions or concerns
                you may have. Whether you need help choosing the right product,
                tracking your order, or anything else, we're just a phone call
                or email away.
                <br />
                <br />
                Thank you for considering our company, and we look forward to
                hearing from you soon!
              </p>

              <div className="col-12 pt-2 ">
                <a target="_blank" href="" className="fs-3 text-red">
                  <i className="bi bi-facebook"></i>
                </a>
                <a target="_blank" href="" className="fs-3 text-red ms-3">
                  <i className="bi bi-whatsapp"></i>
                </a>
                <a target="_blank" href="" className="fs-3 text-red ms-3">
                  <i className="bi bi-envelope"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

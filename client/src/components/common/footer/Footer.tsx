import React from "react";

export const Footer = () => {
  return (
    <footer className="container-fluid bottom-0">
      <div className="col-12">
        <div className="row">
          <div className="col-12 bg-secondary p-4 text-center fw-bold">
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>
            TaproDev | All Rights Recerved (Contact 0783814075 / 0757333502)
          </div>
        </div>
      </div>
    </footer>
  );
};

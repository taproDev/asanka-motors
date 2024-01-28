import React, { useState } from "react";
import {Container,Nav,Navbar} from "react-bootstrap";

export const QuickNavbar = () => {

    const [isNavOpen, setIsNavOpen] = useState(false);

    const handleNavToggle = () => {
      setIsNavOpen(!isNavOpen);
    };

  return (
    <div className="d-flex justify-content-lg-center justify-content-between mx-2">
      <Navbar bg="white" expand="lg" className="flex-md-column">
        <Container>
          <Navbar.Toggle
            className=""
            onClick={handleNavToggle}
            aria-controls="responsive-navbar-nav"
          />
          <Navbar.Collapse id="responsive-navbar-nav">
            <Nav
              className={`flex-lg-row flex-column ${isNavOpen ? "show" : ""}`}
            >
              <Nav.Item>
                <Nav.Link href="#" className="nav-link active">
                  All Product
                </Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link href="#" className="nav-link">
                  Bike
                </Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link href="#" className="nav-link">
                  Helmet
                </Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link href="#" className="nav-link">
                  Three wheel
                </Nav.Link>
              </Nav.Item>
              <Nav.Item>
                <Nav.Link href="#" className="nav-link">
                  Modification Parts
                </Nav.Link>
              </Nav.Item>
            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>
    </div>
  );
};

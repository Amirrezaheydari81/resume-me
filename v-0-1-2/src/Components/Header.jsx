import React, { Component } from 'react';
import { Navbar, Nav } from 'react-bootstrap';
class Header extends Component {
    state = {
        menu: [
            { listname: 'من', listlink: '#me', target: '' },
            { listname: 'داستان من', listlink: '#story', target: '' },
            { listname: 'گواهی نامه', listlink: '#certificate', target: '' },
            { listname: 'پروژه ها', listlink: '#project', target: '' },
            { listname: 'وبلاگ من', listlink: 'https://amirreza-heydari.clarotm.ir/blog/', target: '_blank' },
        ]
    }
    render() {
        return (
            <>
                <Navbar bg="white" variant="white" className='border-1 border-bottom border-dark nav-shadow glass' sticky="top">
                    {/* <Container> */}
                    <Navbar.Brand> </Navbar.Brand>
                    <Nav className="ms-md-5 ms-sm-0">
                        <>
                            {this.state.menu.map(item => <Nav.Link className="mx-md-2 mx-sm-0 text-dark" target={item.target} href={item.listlink}>{item.listname}</Nav.Link>)}
                        </>
                    </Nav>
                    {/* </Container> */}

                </Navbar>
            </>
        );
    }
}

export default Header;
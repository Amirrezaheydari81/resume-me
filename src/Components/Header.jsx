import React, { Component } from 'react';
import { Navbar, Nav } from 'react-bootstrap';

import './Header.css'
class Header extends Component {
    state = {
        menu: [
            { listname: 'من', listlink: '#me', target: '' },
            { listname: 'داستان من', listlink: '#story', target: '' },
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
                    <Nav className="ms-5">
                        <>
                            {this.state.menu.map(item => <Nav.Link className="mx-2 text-dark" target={item.target} href={item.listlink}>{item.listname}</Nav.Link>)}
                        </>
                    </Nav>
                    {/* </Container> */}

                </Navbar>
            </>
        );
    }
}

export default Header;